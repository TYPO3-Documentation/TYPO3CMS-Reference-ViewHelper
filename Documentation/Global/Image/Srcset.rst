:navigation-title: image.srcset

..  include:: /Includes.rst.txt

..  _typo3-fluid-image-srcset:

==========================================
Image.srcset ViewHelper `<f:image.srcset>`
==========================================

..  versionadded:: 14.2

    The new ViewHelper `{f:image.srcset}` simplifies previous manual
    implementations using :fluid:`{f:uri.image}` for each image size
    manually. It now makes it easy to supply images at different dimensions
    based on a single image.

ViewHelper to generate a list of image URLs and their corresponding srcset
descriptors to be used in a srcset attribute of an :html:`<img>` or
:html:`<source>` tag.

The images at different dimensions are generated automatically.

..  seealso::

    In PHP context you can use
    :php:`TYPO3\CMS\Core\Html\Srcset\SrcsetAttribute` to generate srcset
    attributes.

..  typo3:viewhelper:: image.srcset
    :source: /Global.json
    :display: tags,gitHubLink
    :noindex:

..  contents:: Table of contents

..  _typo3-fluid-image-srcset-quick:

Examples of f:image.srcset usage
================================

Using width descriptors in a :html:`<source>` tag:

..  code-block:: fluid

    <picture>
        <source
            srcset="{f:image.srcset(
                image: imageObject,
                srcset: '400w, 600w, 800w',
                cropVariant: 'wide'
            )}"
            sizes="100vw"
            media="(min-width: 1200px)"
        />
        <!-- ... -->
    </picture>

Using density descriptors:

..  code-block:: fluid

    <source
        srcset="{f:image.srcset(
            image: imageObject,
            srcset: '1x, 2x',
            referenceWidth: '500',
            cropVariant: 'desktop'
        )}"
        media="(min-width: 1000px)"
    />

..  _typo3-fluid-image-srcset-html:

About the `srcset` attribute
============================

The HTML :html:`srcset` attribute allows browsers to choose the most
appropriate image variant depending on viewport size and pixel density.

The :html:`srcset` attribute supports:

*   width descriptors such as :html:`400w`
*   density descriptors such as :html:`2x`

The `{f:image.srcset}` ViewHelper generates valid srcset attribute values
for responsive images automatically.

For details about responsive images and browser selection behavior, see:

*   `MDN: Responsive images <https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images>`_
*   `MDN: HTMLImageElement.srcset <https://developer.mozilla.org/en-US/docs/Web/API/HTMLImageElement/srcset>`_
*   `HTML Standard: Images <https://html.spec.whatwg.org/multipage/images.html>`_

..  _typo3-fluid-image-srcset-arguments:

Arguments of the `<f:image.srcset>` ViewHelper
==============================================

..  typo3:viewhelper:: image.srcset
    :source: /Global.json
    :display: arguments-only
