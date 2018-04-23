<?php
class Comment extends Model{

    public function getComment($pID){
        $sql = 'SELECT p.ID, c.commentText, c.date, u.first_name as f_name, u.last_name as l_name, FROM comments c
INNER JOIN posts on posts.pID = c.postID,
INNER JOIN users u on u.uID = p.uID
WHERE p.pID = ?';

        $results = $this->db->getrow($sql, array($pID));

        $comment = $results;

        return $comment;

    }


    public function addComment($data){

        $sql='INSERT INTO comments (commentText,date,uID) VALUES (?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Comment Saved.';
        return $message;

    }

    public function updateComment($data) {

        $sql = 'UPDATE comment SET commentText = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Comment updated.";
        return $message;
    }

    public function getAllPosts($limit = 0){
        if($limit > 0){

            $nummcomments = ' LIMIT '.$limit;
        }

        $sql = 'SELECT p.ID, c.commentText, c.date, u.first_name as f_name, u.last_name as l_name, FROM comments c
INNER JOIN posts on posts.pID = c.postID,
INNER JOIN users u on u.uID = p.uID'.$numcomments;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $comment;

    }
}
?>