<?php namespace Atomino\Carbon\Plugins\Created;

use Atomino\Carbon\Generator\CodeWriter;
use Atomino\Carbon\Plugin\Plugin;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Created extends Plugin{
	public function __construct(public $field = 'created'){ }
	public function generate(\ReflectionClass $ENTITY, CodeWriter $codeWriter){
		$codeWriter->addAttribute('#[Immutable("'.$this->field.'", true)]');
		$codeWriter->addAttribute('#[Protect("'.$this->field.'", true, false)]');
		$codeWriter->addAttribute('#[RequiredField("'.$this->field.'", \Atomino\Carbon\Field\DateTimeField::class)]');
	}
	public function getTrait():string|null{ return CreatedTrait::class;}
}