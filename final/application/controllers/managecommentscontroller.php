<?php

class ManageCommentsController extends Controller{

    public $commentObject;

    protected $access = "1";

    public function index() {

    }

    public function add() {
        $this->commentObject = new Comment();
        $this->set('task', 'save');
    }

    public function save() {
        $this->commentObject = new Comment();
        $data = array('commentText'=>$_POST['commentText'], 'date'=>$_POST['date'], 'uID'=>$_SESSION['uID']);
        $result = $this->commentObject->addComment($data);

        $this->set('message', $result);
    }

    public function edit($pID){
        $this->commentObject = new Comment();
        $comment = $this->commentObject->getComment($pID);
        $this->getCategories();

        $this->set('pID', $comment['pID']);
        $this->set('commentText', $comment['commentText']);
        $this->set('date', $comment['date']);
        $this->set('task', 'update');
    }

    public function update(){
        $data = array('commentText'=>$_POST['commentText'],'date'=>$_POST['date'],'pID'=>$_POST['pID']);

        $this->commentObject = new Comment();

        $result = $this->commentObject->updatePost($data);
        $outcome = $this->commentObject->getAllComments();
        $this->set('posts',$outcome);
        $this->set('message', $result);
        $this->set('task', 'update');
    }
}
