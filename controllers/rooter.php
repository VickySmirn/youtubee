<?php 
public static function playlist(){
            if (!isset($_SESSION['id'])){
                  echo "Please log in or register to follow someones video";
                  return;
            }
            $userId=$_SESSION['id'];
            $user = new \Model\Users();
            $followData=$user::$db->query("SELECT following FROM links__user_follow WHERE follower = '$userId' ")->fetch_all(MYSQLI_ASSOC);

            foreach($followData as $k=>$following){
                  $fol=$following['following'];
                  $videosOfFollowing=$user::$db->query("SELECT * FROM videos WHERE user= '$fol'")->fetch_all(MYSQLI_ASSOC);
                  $followData[$k]["videos"]=$videosOfFollowing;
                  $new=ucwords($user::$db->query("SELECT nickname FROM users WHERE id='$fol'")->fetch_row()[0]);
                  $followData[$k]['fol']=$new;
            }

            include 'view/user/playlists.php';
      }

    }
    ?>
