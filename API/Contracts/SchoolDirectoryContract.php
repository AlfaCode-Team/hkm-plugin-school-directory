<?php

declare(strict_types=1);

namespace Plugins\SchoolDirectory\API\Contracts;

/**
 * Published contract for `school.directory`.
 *
 * The school registry: schools, per-school settings, privacy flags, status guard and the school year. Exposes SchoolScope.
 *
 * Legacy source : schools, school_settings, school_privacy, school_status_guard.php, school_pin.php, elimu_registry, _school_year_helper.php
 * Legacy tables : schools, school_settings, school_privacy, elimu_registry
 *
 * Consumers declare `"requires": ["school.directory"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolDirectoryContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
