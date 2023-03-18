<?

class Garden
{
	public $appleTrees = 0;
	public $pearTrees = 0;
    public $apples = 0;
    public $pears = 0;
    public $appleWeight = 0;
    public $pearWeight = 0;

    public function addTree($type, $amount)
    {
        if ($type == 'apple') {
            $this->appleTrees += $amount;
        } elseif ($type == 'pear') {
            $this->pearTrees += $amount;
        }
    }

    public function collectFruits()
    {
        $this->apples = $this->appleTrees * rand(40, 50);
        $this->pears = $this->pearTrees * rand(0, 20);
    }

    public function countWeight()
    {
        $this->appleWeight = $this->сalculatorWeight($this->apples * rand(150, 180));
        $this->pearWeight = $this->сalculatorWeight($this->pears * rand(130, 170));

        $log = new logs();
        $log -> logs_create('В саду посажено ' . ($this->appleTrees + $this->pearTrees) . ' деревьев. Собрано яблок: ' . $this->apples . ', груш: ' . $this->pears . '. Общий вес яблок: ' . $this->appleWeight . ', груш: ' . $this->pearWeight);
    }

    public function сalculatorWeight($weight)
    {
    	switch ($weight) 
    	{
    		case $weight > 1000 && $weight < 1000000:
    			return ($weight/1000)." кг.";
    			break;
    		case $weight > 1000000:
    			return ($weight/1000000)." т.";
    			break;
    		default:
    			return $weight." гр.";
    			break;
    	}
    }

}


class logs
{
    public function logs_create($log)
    {
        $log = '---------------------'.PHP_EOL.date('Y-m-d H:i:s') . ' Запись в лог'.PHP_EOL.$log;
        file_put_contents(__DIR__.'/../logs/log.txt', $log . PHP_EOL, FILE_APPEND);

    }
}