<?php

class AddPostController extends Controller{
	
	public $postObject;
	
	public function defaultTask(){
		
		$this->postObject = new Post();
		$this->set('task', 'add');
	
	
	}
	
	public function add(){
		
			$this->postObject = new Post();

            $data = array('title'=>$_POST['title'],'content'=>$_POST['content'],'category'=>$_POST['category'],'date'=>$_POST['date']);
			
	
			$result = $this->postObject->addPost($data);
			
			$this->set('message', $result);
			
		
	}

	public function edit($pID){

			$this->postObject = new Post();

			$post = $this->postObject->getPost($pID);

			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
			$this->set('task', 'update');
            $this->set('date', $post['date']);

	}

    public function updatePost($data) {

        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Post has been updated.";
        return $message;
    }
	
}
