# -*- coding: utf-8 -*-
#_author_=lhz
# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: https://docs.scrapy.org/en/latest/topics/item-pipeline.html
import codecs
import json
import pymysql

class RedcrossspiderPipeline:
    def process_item(self, item, spider):
        return item

class JsonPipeline(object):
    def __init__(self):
        self.file = codecs.open('news.json', 'w', encoding='utf-8')
    def process_item(self, item, spider):
        line = json.dumps(dict(item), ensure_ascii=False) + ",\n"
        self.file.write(line)
        return item
    def spider_closed(self, spider):
        self.file.close()