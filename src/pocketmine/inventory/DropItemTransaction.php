<?php

namespace pocketmine\inventory\transaction;

use pocketmine\inventory\BaseTransaction;
use pocketmine\inventory\Transaction;
use pocketmine\item\Item;
use pocketmine\Player;

class DropItemTransaction extends BaseTransaction{
	
	protected $inventory = null;
	
	protected $slot = null;
	
	protected $sourceItem = null;
	
	const TRANSACTION_TYPE = Transaction::TYPE_DROP_ITEM;
	
	/**
	 * @param Item $droppedItem
	 */
	public function __construct(Item $droppedItem){
		$this->targetItem = $droppedItem;
	}
	
	public function setSourceItem(Item $item){
		//Nothing to update
	}
	
	public function getInventory(){
		return null;
	}
	
	public function getSlot(){
		return null;
	}
	
	public function sendSlotUpdate(Player $source){
		//Nothing to update
	}
	
	public function getChange(){
		return ["in" => $this->getTargetItem(),
				"out" => null];
	}
}
