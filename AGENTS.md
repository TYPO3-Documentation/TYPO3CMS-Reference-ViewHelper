# AGENTS.md — Fluid ViewHelper Reference

## Repo structure

```
Documentation/                   # the manual (reST source, published to docs.typo3.org)
Documentation/*.json             # generator-maintained data feeding the typo3:viewhelper directive
```

## Commands

- `make install` — install dependencies
- `make docs` — render the manual locally with Docker
- `make test-docs` — render in fail-on-log mode; use this to validate any change before committing
- `pre-commit run --all-files` — apply the whitespace hooks (`trailing-whitespace`,
  `end-of-file-fixer`) configured in `.pre-commit-config.yaml`; `pre-commit install`
  wires them into `git commit`
- `make test` — full test suite (docs, lint, cgl, yaml)

## Which parts of a ViewHelper page are generated

Every ViewHelper page mixes two kinds of content:

- **Generated** — the description, flags such as *deprecated* or *internal*,
  and the arguments table all come from the ViewHelper's PHP class. The
  `typo3:viewhelper` directive reads them from `Documentation/Global.json`
  and the other JSON files at render time. The
  [Fluid ViewHelper Documentation Generator](https://github.com/TYPO3-Documentation/fluid-documentation-generator)
  keeps those files current, run once a day by the `fluid-viewhelper.yml`
  workflow in `t3docs-ci-deploy`. That is what the
  `M Documentation/Global.json` in every `[BOT][TASK]` commit is.
- **Written by hand** — the explanations, the examples and the page
  structure. This is where contributions go.

Pages are only ever added, never rewritten:

- A ViewHelper that has no page yet gets one from the generator — once.
- An existing page is never overwritten, so hand-written text is safe.
- When a ViewHelper is removed from the TYPO3 Core, its page is left behind
  and has to be deleted by hand.

**Extended examples belong on the page here, not in the PHP doc-comment**; a
doc-comment should stay a short description.

`Documentation/Global/Form/Checkbox.rst` is the reference for how a page
should look: navigation title and anchor, a `typo3:viewhelper` directive
with `:display: tags,description,gitHubLink`, the hand-written sections, and
an "Arguments" section at the end using `:display: arguments-only`. Both
directives point at the JSON via `:source: ../../Global.json`.

See `Documentation/Contribution/Index.rst` for the same guidance aimed at
contributors, and the how-to-document guide's
[Fluid ViewHelper reference generation](https://docs.typo3.org/m/typo3/docs-how-to-document/main/en-us/Maintainers/FluidViewHelper.html)
for the full pipeline.

## Documentation writing rules

Follow the official TYPO3 documentation writing conventions (see
https://github.com/TYPO3-Documentation/TYPO3CMS-Guide-HowToDocument):

1. **reST, not Markdown** — everything under `Documentation/` is reStructuredText.
2. **Sentence case headlines** — first word and proper nouns only; see
   `Documentation/Advanced/ContentStyleGuide.rst` in the how-to-document guide.
3. **4-space indentation** for directive bodies, 2 spaces after `..` markers;
   see `Documentation/Advanced/CodingGuidelines.rst` in the how-to-document guide.
4. **Single backticks over double**, unless the content needs a literal
   backtick; see `Documentation/Reference/ReStructuredText/Code/InlineCode.rst`
   in the how-to-document guide.
5. **Every headline needs a `..  _anchor:` target** directly above it, and
   anchors are never removed once published; see
   `Documentation/Reference/ReStructuredText/Links/Anchors.rst` in the
   how-to-document guide.
6. **Validate before committing** — run `make test-docs`, and run the
   pre-commit hooks (see Commands). If you skip them the scheduled
   `apply-precommit` workflow fixes the whitespace later in a separate
   commit, which is avoidable noise.
7. **Never commit or push without being asked.**

## Commit message format

Follow https://docs.typo3.org/m/typo3/docs-how-to-document/main/en-us/Howto/EditLocal.html:

- Prefix the subject line with `[TASK]`, `[BUGFIX]`, or `[FEATURE]`,
  followed by a short, imperative summary.
- Explain *why* the change is needed in the body — the diff already shows
  what changed.
- End with a `Signed-off-by: Your Name <email>` trailer.
- If AI assistance went beyond basic spelling/grammar checks, add an
  `Assisted-by: <tool/model name> <contact>` trailer, e.g.
  `Assisted-by: Claude Sonnet 5 <noreply@anthropic.com>`.
- If the change should be backported, add a `Releases: main, 14.3, 13.4`
  trailer listing every branch it applies to. This repo maintains multiple
  LTS branches, so `Releases:` applies here — including for changes to
  these agent instruction files themselves, since agents may be working
  on an older branch where a change is still relevant.

## Pull requests

- When a commit is the only commit in the PR, the PR title and body must
  match the commit's subject and body exactly.
- When the commit message has a `Releases:` trailer naming branches beyond
  `main`, attach the matching `backport <version>` label (e.g.
  `backport 14.3`, `backport 13.4`) to the PR for each of those branches
  when opening it — don't wait to be asked.
- Adding labels requires triage/write access, which an external
  contributor's account (e.g. a fork-based PR) usually doesn't have. If
  attaching a label fails for that reason, don't treat it as an error and
  don't note the failure in the PR — just skip it silently.

## For maintainers

- A PR opened by an agent may be missing its `backport <version>` labels
  if the agent's account lacked permission to add them. Check for and add
  any missing backport labels yourself before/when merging such a PR.

## References

- [TYPO3CMS-Guide-HowToDocument](https://github.com/TYPO3-Documentation/TYPO3CMS-Guide-HowToDocument) — official writing style guide and reST reference
- https://docs.typo3.org/m/typo3/docs-how-to-document/main/en-us/Howto/EditLocal.html — commit/PR conventions
