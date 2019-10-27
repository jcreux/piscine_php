<?php

class Tyrion
{
	public function sleepWith($a)
	{
		if ($a instanceof Jaime)
			echo "Not even if I'm drunk !\n";
		if ($a instanceof Sansa)
			echo "Let's do this.\n";
		if ($a instanceof Cersei)
			echo "Not even if I'm drunk !\n";
	}
}

?>
