<?php

declare(strict_types=1);

/**
 * @file classes/observers/events/BasePublicationEvent.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class BasePublicationEvent
 * @ingroup core
 *
 * @brief Base event for publications being published or unpublished
 */

namespace PKP\observers\events;

use Illuminate\Foundation\Events\Dispatchable;

use PKP\publication\PKPPublication;
use PKP\submission\PKPSubmission;

class BasePublicationEvent
{
    use Dispatchable;

    /** @var PKPPublication $newPublication The publication being published */
    public $newPublication;

    /** @var PKPPublication $publication Old publication, before processing */
    public $publication;

    /** @var PKPSubmission $submission Submission associated with the publication */
    public $submission;

    /**
     * Class construct
     *
     * @param PKPPublication $newPublication The publication being published
     * @param PKPPublication $publication Old publication, before processing
     * @param PKPSubmission $submission Submission associated with the publication
     */
    public function __construct(
        PKPPublication $newPublication,
        PKPPublication $publication,
        PKPSubmission $submission
    ) {
        $this->newPublication = $newPublication;
        $this->publication = $publication;
        $this->submission = $submission;
    }
}
