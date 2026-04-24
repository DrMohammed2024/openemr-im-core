# Remote Baseline Heads Verification

Date: 2026-04-24

## Environment

- Android / Termux
- Local path: /storage/emulated/0/Download/openemr-im-core
- Repository initialized from GitHub ZIP archive
- Normal git clone and full git fetch were not completed due to RPC/EOF network failures.

## Remotes

- origin: https://github.com/DrMohammed2024/openemr-im-core.git
- upstream: https://github.com/openemr/openemr.git

## Lightweight Remote Head Check

Commands used:

- git ls-remote --heads origin master
- git ls-remote --heads upstream master

Observed result:

- origin/master: 4272335e865da924ef7dc022337e3703f773a06a
- upstream/master: cd49c3f3ef06cdba2a2b39300c21eddb1e78efa0

## Interpretation

- origin/master exists remotely.
- upstream/master exists remotely.
- The active branch name for both checked remotes is master.
- Full local Git object fetch was not completed in Termux because transfer failed with RPC/EOF errors.
- Exact local divergence diff is not yet available.
- This file records safe lightweight verification evidence for PR 1.
