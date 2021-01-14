<?php namespace Atomino\Molecules\EntityPlugin\Created;

use Atomino\Entity\Attributes\EventHandler;
use Atomino\Entity\Entity;

trait CreatedTrait{
	#[EventHandler(Entity::EVENT_BEFORE_INSERT)]
	protected function CreatedPlugin_BeforeInsert($event, $data){
		$this->{Created::fetch(static::model())->field} = new \DateTime();
	}
}