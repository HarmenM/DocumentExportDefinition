<?php
namespace DocumentExportDefinition\Section\Data;

use DocumentExportDefinition\Section\AbstractSectionDefinition;
use JMS\Serializer\Annotation as Serializer;

class FileDefinition extends AbstractSectionDefinition
{
	/**
	 * @Serializer\SerializedName("contents")
	 * @Serializer\Type("array")
	 * @var string
	 */
	protected $contents;

	public function getType()
	{
		return 'FileDefinition';
	}
}
