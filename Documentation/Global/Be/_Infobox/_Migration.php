<?php

// Before
use TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper;

$state = InfoboxViewHelper::STATE_ERROR;

// After - Recommended: Use the enum directly
use TYPO3\CMS\Core\Type\ContextualFeedbackSeverity;

$state = ContextualFeedbackSeverity::ERROR;

// Alternative: Use the integer value when explicitly needed
$stateValue = ContextualFeedbackSeverity::ERROR->value;
