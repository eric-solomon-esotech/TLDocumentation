<?php
class Defs extends Terms {
    function showDefs(){
        $result = $this->getAllTerms();
        foreach($result as $data)
        {
            echo '<div style="display:inline;"><span class="term" style="display:inline;" id="'.$data['anchor'].'">'.$data['term'].'</span>&nbsp;<span class="top" style="display:inline;">(<a href="./glossary.php">back to top</a>)</span></div>
            <div class="tags">Tags: '.$data['tags'].'</div>
            <div class="definition">'.$data['definition'].'</div>';
        }
    }
}
?>