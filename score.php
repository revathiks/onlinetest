<?php

class LeagueTable
{
    public function __construct(array $players)
    {
        $this->standings = [];
        foreach($players as $index => $p) {
            $this->standings[$p] = [
                'index'        => $index,
                'games_played' => 0,
                'score'        => 0
            ];
        }
    }

    public function recordResult(string $player, int $score) : void
    {
        $this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
    }

    public function playerRank(int $rank) : string
    {
		
		$arr=$this->standings;
		array_multisort(
            array_column($arr,'score'), SORT_DESC, SORT_NUMERIC,
            array_column($arr,'games_played'), SORT_ASC, SORT_NUMERIC,
             array_column($arr,'index'), SORT_ASC, SORT_NUMERIC,
          
            $arr );
			
			
		$result=array();
		$i=1;
		foreach($arr as  $key => $res){
			
			$result[$i]= $key ;
			$i++;
		}
			
		return $result[$rank];
        
    }
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(2);
?>