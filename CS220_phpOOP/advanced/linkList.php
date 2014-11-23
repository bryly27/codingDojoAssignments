<?php  

//--------add new node-----------

class doublyLinkedNode
{
	public $head;
	public $tail;

	public function addNode()
	{
		$node = new node();
		$node->value = $value;

		if(is_null($this->head))
		{
			$this->head = $node;
			$this->tail = $node;
		}
		else 
		{
			$node->prev = $this->tail;
			$this->tail->next = $node;
			$this->tail = $node;
		}
	}

	public function displayNode()
	{
		echo $this->node;
	}
}

class node
{
	public $prev;
	public $next;
	public $value;

}



//-------------variables-------------

$name = new doublylinkednode('Bryant');
$name->addNode()->displayNode();

// class doublylinkedlist
// 	head
// 	tail
// //public function insert()
// {
// 	//node=new node()
// 	//node->value=$value

// 	//if(is null (this->head)){
// 	this->head=$node;
// 	this->tail=$node;
// }
// 	//else 
// {
// 	$node->prev=$this->tail;

// 	this->tail->next=$node;
// 	$this->tail=$node;
// }
// }

// function display()
// {
// 	if
// }


// class node {
// 	public prev
// 	//next
// 	//value
// }

?>