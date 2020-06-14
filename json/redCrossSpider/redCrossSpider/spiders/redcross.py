# -*- coding: utf-8 -*-
#_author_=lhz
import scrapy
import re
import pymysql
from redCrossSpider.items import  RedcrossspiderItem

class RedcrossSpider(scrapy.Spider):
    name = 'redcross'
    allowed_domains = ['www.redcross.org.cn/']
    start_urls = [f'https://www.redcross.org.cn/NList.aspx?type=news&cla=zhgzdt&search=%E6%8E%A5%E5%8F%97%E4%BD%BF%E7%94%A8%E6%96%B0%E5%9E%8B%E5%86%A0%E7%8A%B6%E7%97%85%E6%AF%92%E8%82%BA%E7%82%8E%E7%96%AB%E6%83%85%E9%98%B2%E6%8E%A7%E7%A4%BE%E4%BC%9A%E6%8D%90%E8%B5%A0%E6%AC%BE%E7%89%A9%E5%8A%A8%E6%80%81&page=1'] #for page in range(1,10)]

    def prase_news(self,response):
        # 提取新闻页的数据//body/section/div/div/p/span/text()
        data = response.xpath('//body/section/div/div/p/span/text()')
        if data:
            # 在新闻页
            news = data[1].get()
            # 类似['2020', '4', '2', '17', '211021.39', '160416.95', '50604.44']
            # 时间，捐赠款物/万元，接受资金/万元，物资价值/万元
            news_data = re.findall(r"\d+\.?\d*", news)
            if news_data[0] == '２０２０':  # 该网站的奇怪字符格式
                news_data = re.findall(r"\d+\．?\d*", news)
            else:
                news_data = re.findall(r"\d+\.?\d*", news)

            date = news_data[0] + '-' + news_data[1] + '-' + news_data[2]
            # scrapy.item类
            donate_data = RedcrossspiderItem()
            donate_data['date'] = date
            donate_data['total'] = news_data[4]
            donate_data['cash'] = news_data[5]
            donate_data['equip'] = news_data[6]
            donate_data['news']=news
            print(donate_data)
            yield donate_data



    def parse(self, response):

        #在目录页，提取herf// ul / li / a / @ href
        hrefs={}
        selectors = response.xpath('//body/li')
        # print(selectors)
        for selector in selectors:
            href=selector.xpath('./a/@href').get()
            href='https://www.redcross.org.cn'+href
            date=selector.xpath('./span/text()').get()
            #date作为字典的键
            hrefs[date]=href
            # print(href,date)

        #对每页新闻爬取
        for date,link in hrefs.items():
            # print(date,link)
            yield scrapy.Request(link,callback=self.prase_news,dont_filter = True)