<?php
class Post extends Model{
	
	function getPost($pID){
		
		$sql =  'SELECT pID, title, uID, categoryID, date, content FROM posts WHERE pID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllPosts($limit = 0){
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT pID, title, uID, categoryID, date, content FROM posts'.$numposts;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}

    public function addPost($data){

        $sql='INSERT INTO posts (title,content,categoryID,date,uID) VALUES (?,?,?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Post has been added.';
        return $message;

    }

    public function updatePost($data) {

        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Post has been updated.";
        return $message;
    }
	
	
}