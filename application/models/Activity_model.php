<?php

class Activity_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('id');
	}

	public function getActivities()
	{
		$invitations_id = array();
		$invitations = $this->get_invitations();
		foreach($invitations as $invitation){
			$invitations_id[] = $invitation['event_id'];
		}

		$this->db->select('activity.*,files.path,invitations.accepted');
		$this->db->from('activity');
		$this->db->join('files', 'files.id = activity.cover', 'left');
		$this->db->join('invitations', 'invitations.event_id = activity.id', 'left');
		$this->db->where('activity.user_id', $this->user_id);
		if (count($invitations_id))
			$this->db->or_where('activity.id IN (' . implode(',',$invitations_id) . ')');
		$query = $this->db->get();

		return $query->result_array();
	}


	public function getEndedActivities()
	{
		$invitations_id = array();
		$invitations = $this->get_invitations();
		foreach($invitations as $invitation){
			$invitations_id[] = $invitation['event_id'];
		}

		$date = date('Y-m-d');
		$this->db->select('activity.*,files.path,invitations.accepted');
		$this->db->from('activity');
		$this->db->join('files', 'files.id = activity.cover');
		$this->db->join('invitations', 'invitations.event_id = activity.id', 'left');
		$this->db->group_start();
		$this->db->where('activity.user_id', $this->user_id);
		if (count($invitations_id))
			$this->db->or_where('activity.id IN (' . implode(',',$invitations_id) . ')');
		$this->db->group_end();
		$this->db->where('activity.end_date < ', $date);

		$query = $this->db->get();

		return $query->result_array();

	}

	public function getOpenActivities()
	{
		$invitations_id = array();
		$invitations = $this->get_invitations();
		foreach($invitations as $invitation){
			$invitations_id[] = $invitation['event_id'];
		}

		$date = date('Y-m-d');
		$this->db->select('activity.*,files.path,invitations.accepted');
		$this->db->from('activity');
		$this->db->join('files', 'files.id = activity.cover');
		$this->db->join('invitations', 'invitations.event_id = activity.id', 'left');
		$this->db->group_start();
		$this->db->where('activity.user_id', $this->user_id);
		if (count($invitations_id))
			$this->db->or_where('activity.id IN (' . implode(',',$invitations_id) . ')');
		$this->db->group_end();
		$this->db->where('activity.date < ', $date);
		$this->db->where('activity.end_date > ', $date);

		$query = $this->db->get();

		return $query->result_array();

	}

	public function getUpcomingActivities()
	{
		$invitations_id = array();
		$invitations = $this->get_invitations();
		foreach($invitations as $invitation){
			$invitations_id[] = $invitation['event_id'];
		}

		$date = date('Y-m-d');
		$this->db->select('activity.*,files.path,invitations.accepted');
		$this->db->from('activity');
		$this->db->join('files', 'files.id = activity.cover');
		$this->db->join('invitations', 'invitations.event_id = activity.id', 'left');
		$this->db->group_start();
		$this->db->where('activity.user_id', $this->user_id);
		if (count($invitations_id))
			$this->db->or_where('activity.id IN (' . implode(',',$invitations_id) . ')');
		$this->db->group_end();
		$this->db->where('activity.date > ', $date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getActivity($id)
	{
		$this->db->select('activity.*,questions.*,question_answers.*,files.path');
		$this->db->from('activity');
		$this->db->join('questions', 'questions.activity_id = activity.id', 'left');
		$this->db->join('question_answers', 'question_answers.question_id = questions.id', 'left');
		$this->db->join('files', 'activity.id = files.id', 'left');
		$this->db->where('activity.id', $id);

		$query = $this->db->get();

		return $query->result_array();

	}

	public function getEventDetails($id)
	{
		$this->db->select('activity.*,files.path');
		$this->db->from('activity');
		$this->db->where('activity.id', $id);
		$this->db->join('files', 'activity.cover = files.id', 'left');
		$query = $this->db->get();

		return $query->result_array();

	}

	public function addActivity($data)
	{
		$this->db->insert('activity', $data);
	}

	public function addQuestion($data)
	{
		$this->db->insert('questions', $data);
	}

	public function addAnswer($data)
	{
		$this->db->insert('question_answer', $data);
	}

    public function getQuestions($activityId)
    {
        $this->db->select('text');
        $this->db->from('questions');
        $this->db->where('activity_id',$activityId);

        $query = $this->db->get();

        return $query->result_array();

    }

    public function getAnswers($questionId)
    {
        $this->db->select('text,votes');
        $this->db->from('question_answers');
        $this->db->where('question_id',$questionId);

        $query = $this->db->get();

        return $query->result_array();
    }

	public function getActivitiesFiles($user_id, $activity_id)
	{
		$this->db->select('files.path');
		$this->db->from('files');
		$this->db->where('user_id', $user_id);
		$this->db->where('activity_id', $activity_id);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_invitations(){
		$invitations = $this->db
			->where('to_user_email', $this->session->userdata('email'))
			->get('invitations');
		return $invitations->result_array();
	}

	public function check_event_invitation($id, $email)
	{
		$invitations = $this->db->where('event_id', $id)->where('to_user_email', $email)->get('invitations');

		return $invitations->num_rows() ? false : true;
	}

	public function create_event_invitation($id, $email)
	{
		if (!$this->check_event_invitation($id, $email)) return false;
		$hash = md5($this->user_id . $email);
		$data = array(
			'event_id'      => $id,
			'to_user_email' => $email,
			'from_user_id'  => $this->user_id,
			'hash'  => $hash,
		);
		$this->db->insert('invitations', $data);
		return $hash;
	}

	public function get_notifications(){
		$notifications = $this->db->where('to_user_email', $this->session->userdata('email'))
			->select('activity.*,invitations.hash,files.path')
			->from('invitations')
			->where('accepted', 0)
			->join('activity', 'invitations.event_id = activity.id')
			->join('files', 'activity.cover = files.id', 'left')
			->get();
		return $notifications->result_array();
	}

}