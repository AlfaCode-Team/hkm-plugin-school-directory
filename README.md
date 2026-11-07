# hkm-plugin-school-directory

> Solves **`school.directory`** · namespace **`Plugins\SchoolDirectory\`** · on-demand GDA module
> Family: Elimu / school domain

The school registry: schools, per-school settings, privacy flags, status guard and the school year. Exposes SchoolScope.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolDirectoryContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `schools, school_settings, school_privacy, school_status_guard.php, school_pin.php, elimu_registry, _school_year_helper.php` |
| Legacy tables | `schools, school_settings, school_privacy, elimu_registry` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `audit.trail`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.directory"] }
```

```php
$svc = $container->make(\Plugins\SchoolDirectory\API\Contracts\SchoolDirectoryContract::class);
```

## Installing

```bash
hkm plugins enable SchoolDirectory <project>
```
