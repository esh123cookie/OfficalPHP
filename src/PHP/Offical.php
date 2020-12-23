<?php


    function getConvertedPlayerRank(Player $player) {
	    $config = new Config($this->plugin->playerFolder . strtolower($player->getName()) . ".yml", Config::YAML);
	    $first = array_key_first($this->getRankCount());
	    $last = array_key_last($this->getRankCount());
    }
         
  function get_next_key_array($array, $key){
    $keys = array_keys($array);
    $position = array_search($key, $keys);
    if (isset($keys[$position + 1])) {
        $nextKey = $keys[$position + 1];
      }
      return $nextKey;
    }

    $array = array('A', 'B', 'C');
    $keyInt = 1;
    $nextKey = get_next_key_array($array, [1]);
    
    if($keyInt == 1) {
       $keyInt = 2;
       $nextKey = get_next_key_array($array, [2]);
    }
    
    
    echo(MESSAGE::get["noStored"]);
    
    /*$statement["REASON"] = "TO HELP";
         echo(strtoupper(space() . $statement["REASON"]));
              getPlayer();
              echo(space() . getPlayer());
              echo(space() . ucfirst("esh"));
              echo(getName());
              
              
    function getName() { 
                $player = player();
                return $player["NAME"];
    }
              
    function getPlayer(): string {
    $player["NAME"] = array("Esh", "Esh123unicorn");
    
    if(ucfirst(array_rand($player["NAME"])) == 1) { 
       $user = space() . "Esh";
    }else{ 
       $user = space() . "Esh123unicorn";
    }
           return $user;
           
    }
    
