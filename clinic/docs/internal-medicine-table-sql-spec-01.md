# Internal Medicine table.sql Spec - 01

## Objective
Define the exact SQL structure for the first V1 Internal Medicine encounter form table.

Target file later:
`interface/forms/internal_medicine/table.sql`

---

## V1 Table Name
`form_internal_medicine`

---

## Build Strategy
For V1, use a single-row-per-encounter form table.

One encounter = one internal medicine form row.

Do not use multi-row note storage in V1.

---

## Required Core Columns

### Identity / linkage
- `id`
- `pid`
- `encounter`
- `uuid`
- `date`
- `user`
- `groupname`
- `authorized`
- `activity`

### Clinical identity
- `visit_type`
- `chief_complaint`
- `history_present_illness`
- `past_medical_history`
- `medications`
- `allergies`
- `physical_examination`
- `assessment`
- `plan`

### Metadata
- `created_at`
- `updated_at`

---

## Proposed SQL Draft Shape

```sql
CREATE TABLE IF NOT EXISTS `form_internal_medicine` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) DEFAULT NULL,
  `encounter` bigint(20) DEFAULT NULL,
  `uuid` binary(16) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `groupname` varchar(255) DEFAULT NULL,
  `authorized` tinyint(4) DEFAULT NULL,
  `activity` tinyint(4) DEFAULT 1,

  `visit_type` varchar(100) DEFAULT NULL,
  `chief_complaint` text,
  `history_present_illness` longtext,
  `past_medical_history` longtext,
  `medications` longtext,
  `allergies` longtext,
  `physical_examination` longtext,
  `assessment` longtext,
  `plan` longtext,

  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),

  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`),
  KEY `pid` (`pid`),
  KEY `encounter` (`encounter`)
) ENGINE=InnoDB;
