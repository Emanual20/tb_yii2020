# -*- coding: utf-8 -*-
#_author_=lhz
# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

import scrapy


class RedcrossspiderItem(scrapy.Item):
    # define the fields for your item here like:
    # name = scrapy.Field()
    date=scrapy.Field()
    total=scrapy.Field()
    equip=scrapy.Field()
    cash=scrapy.Field()
    news=scrapy.Field()