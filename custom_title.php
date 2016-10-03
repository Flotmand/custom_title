<?php
  function ls_title() {
    // Counts the words in the string
  $ls_title_count = str_word_count(get_the_title(), 0, 'æøå');
  
    //splits the string in an array with each word
  $ls_title = explode(" ", get_the_title());
  ?>
  <h1 class="title">
      <span class="small_header_text">
          <?php
              // Loops through all the words in the array with index before the last word.
              // If only 1 word, nothing will come out of this for-loop.
              for ($i = 0; $i < $ls_title_count-1; $i++) {
                echo $ls_title[$i] . " ";
              }
          ?>
      </span>
      <br>
      <span class="big_header_text">
          <?php
          //$last_word = array_pop($ls_title);
          echo array_pop($ls_title);
          ?>
      </span>
  </h1>
  <?php
  }
  ?>
