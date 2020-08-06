<?php
class ToC extends Terms {
    function showToC(){
        $previous = "A";
        $result = $this->getAllTerms();
        foreach($result as $data)
        {
            $first_letter = substr($data['anchor'], 0, 1);
            if($previous == $first_letter)
            {
                echo '<li><a href="#'.$data['anchor'].'">'.$data['term'].'</a></li>';
            } else {
                echo '</ul>
                <li><div id="'.$first_letter.'" class="toc">'.$first_letter.'</div></li>
                <ul>
                <li><a href="#'.$data['anchor'].'">'.$data['term'].'</a></li>';
            }
            $previous = $first_letter;
        }
    }
}
?>