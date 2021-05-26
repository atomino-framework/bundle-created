<?php namespace Atomino\Carbon\Plugins\Created;

use Atomino\Carbon\Attributes\EventHandler;
use Atomino\Carbon\Entity;

trait CreatedTrait{
	#[EventHandler(Entity::EVENT_BEFORE_INSERT)]
	protected function CreatedPlugin_BeforeInsert($event, $data){
		$this->{Created::fetch(static::model())->field} = new \DateTime();
	}
}