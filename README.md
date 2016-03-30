# Just a simple Yii2 Embed Widget for Yii2

[![Latest Version](https://img.shields.io/github/tag/ericmaicon/yii2-embed.svg?style=flat-square&label=release)](https://github.com/ericmaicon/yii2-embed/tags)
[![Build Status](https://img.shields.io/travis/ericmaicon/yii2-embed/master.svg?style=flat-square)](https://travis-ci.org/ericmaicon/yii2-embed)

Simple extension to use Embed. THIS IS AN IN PROGRESS EXTENSION.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require ericmaicon/yii2-embed:*
```

or add

```
"ericmaicon/yii2-embed": "*"
```

to the `require` section of your `composer.json` file.

## Usage

Using with the Grid:

```
<?= \Da\export\GridView::widget([
    'dataProvider' => $dataProvider,
]); ?>
```

To use Kartik's grid you will need to override renderExport method:

```
<?= Embed::widget(['url' => 'https://www.youtube.com/watch?v=3k9cK_n1mlg']); ?>
```

## Testing

TODO

## What is missing?

TODO