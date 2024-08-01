# CSS Web Fonts and the @font-face Rule

## Overview
Web fonts enable designers to use custom fonts not installed on the user's computer. Using the `@font-face` rule in CSS, you can specify your own fonts, which are downloaded automatically when needed.

## Different Font Formats

### TrueType Fonts (TTF)
- Developed in the late 1980s by Apple and Microsoft.
- Common format for Mac OS and Windows.

### OpenType Fonts (OTF)
- Built on TrueType.
- Scalable computer fonts, trademark of Microsoft.
- Widely used on major platforms.

### Web Open Font Format (WOFF)
- Developed in 2009, now a W3C Recommendation.
- OpenType or TrueType with compression and additional metadata.
- Optimized for server-to-client font distribution.

### Web Open Font Format (WOFF 2.0)
- Improved compression compared to WOFF 1.0.
- TrueType/OpenType fonts.

### SVG Fonts/Shapes
- Allows SVG to be used as glyphs for text.
- Defined in the SVG 1.1 specification.
- CSS can be applied to SVG documents.

### Embedded OpenType Fonts (EOT)
- Compact form of OpenType fonts by Microsoft.
- Designed for use as embedded fonts on web pages.

## Browser Support for Font Formats
The table below specifies the first browser version that fully supports each font format:

| Font format | IE    | Firefox | Chrome | Safari | Opera |
|-------------|-------|---------|--------|--------|-------|
| TTF/OTF     | 9.0*  | 4.0     | 3.5    | 3.1    | 10.0  |
| WOFF        | 9.0   | 5.0     | 3.6    | 5.1    | 11.1  |
| WOFF2       | 14.0  | 36.0    | 39.0   | 10.0   | 26.0  |
| SVG         | Not supported | Not supported | Not supported | 3.2 | Not supported |
| EOT         | 6.0   | Not supported | Not supported | Not supported | Not supported |

*IE: Only works when set to be "installable".

## Using Custom Fonts
To use a custom font, define a name and point to the font file in the `@font-face` rule. 

### Example
```css
@font-face {
  font-family: myFirstFont;
  src: url(sansation_light.woff);
}

div {
  font-family: myFirstFont;
}
```

### Using Bold Text
Add another `@font-face` rule for bold text:
```css
@font-face {
  font-family: myFirstFont;
  src: url(sansation_bold.woff);
  font-weight: bold;
}
```

## CSS Font Descriptors
Below are the descriptors you can define inside the `@font-face` rule:

| Descriptor      | Values                                                        | Description                                       |
|-----------------|---------------------------------------------------------------|---------------------------------------------------|
| `font-family`   | name                                                          | Required. Defines a name for the font.            |
| `src`           | URL                                                           | Required. Defines the URL of the font file.       |
| `font-stretch`  | normal, condensed, ultra-condensed, extra-condensed, semi-condensed, expanded, semi-expanded, extra-expanded, ultra-expanded | Optional. Defines how the font should be stretched. Default is "normal". |
| `font-style`    | normal, italic, oblique                                       | Optional. Defines how the font should be styled. Default is "normal". |
| `font-weight`   | normal, bold, 100, 200, 300, 400, 500, 600, 700, 800, 900     | Optional. Defines the boldness of the font. Default is "normal". |
| `unicode-range` | unicode-range                                                 | Optional. Defines the range of UNICODE characters the font supports. Default is "U+0-10FFFF". |

