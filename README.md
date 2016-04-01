# Pinterest Image Buttons

Adds an extension to the image object that lets you place a pinterest share button to share a high resolution version of the image.

To add a pinterest button next to your image you just have to add the following line in you template:

```
$Image.PlacePinterestButton
```

The module also adds an field to the SiteConfig were the CMS Editor can add a Pinterest Domain Verification ID, optionaly you can set this value in your config.yml. That way the field will not be displayed in de CMS.

```
# _config/config.yml

PinterestButton:
  pinterest_domain_verify_id: 'Your_ID'
```

## Todo

Use the default pinterest button and script requirement