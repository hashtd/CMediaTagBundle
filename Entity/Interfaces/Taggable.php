<?php

/*
 * This file is part of the Cmedia Bundle
 *
 * (c) Alexandr Jeliuc <jeliucalexandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\Common\Collections\ArrayCollection;

namespace CMedia\Bundle\TagBundle\Entity\Interfaces;

/**
 * @author Alexandr Jeliuc <jeliucalexandr@gmail.com>
 * @package CMedia\Bundle\TagBundle\Entity\Interfaces
 * @license MIT http://opensource.org/licenses/MIT
 * @copyright Alexandr Jeliuc <jeliucalexandr@gmail.com>
 */
interface Taggable
{
	function getTags();

	function setTags(ArrayCollection $tags);

	function getTagString();

	function getTagsInserted();

	function setTagString($tagString);
}