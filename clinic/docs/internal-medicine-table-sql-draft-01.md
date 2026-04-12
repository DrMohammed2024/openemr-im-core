# Internal Medicine Table SQL Draft - 01

## Objective
Define the first safe SQL table design for the Internal Medicine encounter form.

This draft is for V1 only.

---

## V1 Table Strategy
Use a dedicated encounter form table plus a normal `forms` table registration row.

### Reason
This is the safest and clearest first implementation path.

---

## Proposed Table Name
`form_internal_medicine`

---

## Record Model
For V1:
- one row per encounter form instance
- one Internal Medicine form per encounter
- record linked to normal OpenEMR `forms` table entry by `form_id`

---

## Proposed SQL Columns

### Primary identity
- `id`
- `date`
- `pid`
- `encounter`
- `user`
- `groupname`
- `authorized`
- `activity`

### Clinical identity
- `visit_type`

### Core clinical content
- `chief_complaint`
- `hpi`
- `vital_signs_summary`
- `physical_exam_general`
- `physical_exam_chest`
- `physical_exam_cardiovascular`
- `assessment`
- `plan`
- `investigations`
- `treatment`
- `follow_up`
- `red_flags`

---

## Proposed SQL Draft

```sql
CREATE TABLE IF NOT EXISTS `form_internal_medicine` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `date` DATETIME DEFAULT NULL,
  `pid` BIGINT(20) NOT NULL,
  `encounter` BIGINT(20) NOT NULL,
  `user` VARCHAR(255) DEFAULT NULL,
  `groupname` VARCHAR(255) DEFAULT NULL,
  `authorized` TINYINT(4) DEFAULT 0,
  `activity` TINYINT(4) DEFAULT 1,

  `visit_type` VARCHAR(100) DEFAULT NULL,

  `chief_complaint` TEXT,
  `hpi` LONGTEXT,
  `vital_signs_summary` TEXT,

  `physical_exam_general` TEXT,
  `physical_exam_chest` TEXT,
  `physical_exam_cardiovascular` TEXT,

  `assessment` LONGTEXT,
  `plan` LONGTEXT,
  `investigations` LONGTEXT,
  `treatment` LONGTEXT,
  `follow_up` LONGTEXT,
  `red_flags` LONGTEXT,

  PRIMARY KEY (`id`),
  KEY `idx_im_pid` (`pid`),
  KEY `idx_im_encounter` (`encounter`),
  KEY `idx_im_pid_encounter` (`pid`, `encounter`)
) ENGINE=InnoDB;
