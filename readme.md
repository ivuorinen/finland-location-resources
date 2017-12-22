# Finnish Municipalities and Provinces

This small repository was created because I couldn't find any place where one could get the up to date listing of municipalities and/or provinces of Finland. This repository should provide information where to find all the data online, and provide help how to use it.

## Up to date Municipalities and Provinces listing (`kunta_mk_teksti`)

This script takes the listing from [Statistics Finland][stats-fi] and cleans it up for you.

1. Browse to [https://www.stat.fi/meta/luokitukset/kunta/001-2017/luokitusavaimet.html](https://www.stat.fi/meta/luokitukset/kunta/001-2017/luokitusavaimet.html)
2. Search for `Kunnat 2017 / Maakunta 2017` or similar and download the `tekstitiedosto (txt)`
    - See [Terms of use][stats-fi-tos]
    - Protip: Changing the url part `001-2017` to `001-2016` shows the previous year, if you need that for some reason.
3. Place the text file next to `kunta_mk_teksti.php`
4. Browse to/Run `kunta_mk_teksti.php` and get the list in easy to read, alphabetical format

## Up to date Municipalities in GeoJSON

This one requires a bit of fiddling and conversion. From GML to GeoJSON to be exact.

1. Getting the data
    1. Open [National Land Survey of Finland][nls]'s [File service of open data][nls-fsod] (see [Terms of service][nls-tos])
    2. Select one of "Municipal Division" from left sidebar (you probably need to scroll the listing) by clicking the green plus-symbol
    3. Select `GML` as file format (`etrs-tm35fin` is as of writing the only coordinate system they provide, [read more here][tm35fin])
    4. Click the center container to apply the selected layer
    5. Click "Place your order" on the right hand side panel and follow directions to get the material
2. Converting the data to GeoJSON
    - [GeoConverter][gc] (web, [tos][gc-tos])
    - [MyGeodata Converter][mgc] (web, paid plans, [tos][mgc-tos])
    - [OpenGeoTools][ogt] (web, [tos][ogt-tos])
    - [Ogre][ogre-web] (web, [open source](https://github.com/wavded/ogre)) "ogr2ogr geojson-focused web client"
    - [ogr2ogr][ogr2ogr] seems to be _the cli tool_ everything else is based on. Part of [GDAL project][gdal].

---

The hopefully helpful tips and guides are released under [CC-BY-SA-4.0](https://choosealicense.com/licenses/cc-by-sa-4.0/), scripts and other code are released under [GPL-3.0](https://choosealicense.com/licenses/gpl-3.0/). This repository has no affiliation with any of the mentioned instances, services or linked tools.

All contributions are welcome!

[stats-fi]: https://www.stat.fi/index_en.html
[stats-fi-tos]: https://www.stat.fi/org/lainsaadanto/copyright_en.html
[nls]: http://www.maanmittauslaitos.fi/en
[nls-tos]: http://www.maanmittauslaitos.fi/en/e-services/open-data-file-download-service
[nls-fsod]: https://tiedostopalvelu.maanmittauslaitos.fi/tp/kartta?lang=en
[gc]: https://geoconverter.hsr.ch/
[gc-tos]: https://giswiki.hsr.ch/GeoConverter#Terms_of_Service
[mgc]: https://mygeodata.cloud/converter/gml-to-geojson
[mgc-tos]: https://mygeodata.cloud/terms-of-service/
[ogt-tos]: http://www.opengeotools.com/terms.php
[ogt]: http://www.opengeotools.com/GMLtoGeoJson.php
[ogre-web]: https://ogre.adc4gis.com/
[ogr2ogr]: http://www.gdal.org/ogr2ogr.html
[gdal]: http://www.gdal.org

[tm35fin]: https://epsg.io/3067
[license-mit]: https://en.wikipedia.org/wiki/MIT_License