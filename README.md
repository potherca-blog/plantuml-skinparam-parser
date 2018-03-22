# PlantUML `skinparam` parser

<img src="./docs/plantuml-parser-logo.png" width="293" height="287" />

> _"Writing a really general parser is a major but different undertaking, by far
> the hardest points being sensitivity to context and resolution of ambiguity."_
> ~ Graham Nelson

Quick and dirty script to parse all available `skinparam` from the PlantUML code
base.

## Introduction

[PlantUML](https://plantuml.com/) is a great tool for drawing UML diagrams.
It supports many diagrams and has _lots_ of features.

One such feature, [`skinparam`](http://plantuml.com/skinparam) allows changing
the way diagrams look (or behave).

Sadly, PlantUML also has some shortcomings, mostly in terms of documentation.

The [manual](http://plantuml.com/PlantUML_Language_Reference_Guide.pdf) mentions
`skinparam` and there is a command<sup>[1]</sup> to show a list of available
`skinparam` but neither are complete.

This project offers a quick-and-dirty way of listing all available `skinparam`.

The full list is available in the `build` directory.

The list is created by parsing the Java code. The code that does this is written
in PHP<sup>[2]</sup>.

## Usage

There is [a full list of `skinparam`](./build/skinparams.txt) available in the `build` directory.
There is also [a list with `skinparam` default values](./build/skinparams-defaults.txt).

At a later point, a file will be added that [defines constants](http://plantuml.com/preprocessing)
for the values rather than hard-coding them.

The simplest thing is to just use those files.

### Parsing a list from the PlantUML code

To create a list, the following steps need to be taken:

1. Download the [PlantUML source-code](https://github.com/plantuml/plantuml)
2. Download this project
3. Run the parser: `./bin/parse-skinparam <plantuml-source-directory>`.
4. ...
5. Profit!

For instance:

```
cd /tmp
git clone https://github.com/plantuml/plantuml.git
git clone https://github.com/potherca-blog/plantuml-skinparam-parser.git

/tmp/plantuml-skinparam-parser/bin/parse-skinparam /tmp/plantuml/
```

## Colophon

- **Author**: Created by [Potherca](https://pother.ca/).
- **Homepage**: [web-page](https://blog.pother.ca/plantuml-skinparam-parser/) / [git-repo](https://github.com/potherca-blog/plantuml-skinparam-parser/)
- **License**: Licensed under the GPL-3.0 license (GNU General Public License v3.0)
- **Logo**: Based on the ["SEO"](https://thenounproject.com/icon/463840/) icon by [Gregor Cresnar](http://iconix.si) from [the Noun Project](https://thenounproject.com/).


## Footnotes

1. `java -jar plantuml.jar -language`
2. I did say "quick" _and_ "dirty"
