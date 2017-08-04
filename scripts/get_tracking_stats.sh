#!/usr/bin/env python
#-*- coding: UTF-8 -*-

import MySQLdb
import time

# MySQL
DB_IP = "172.26.6.7"
DB_PORT = 3306
DB_NAME = "kyros4"
DB_USER = "root"
DB_PASSWORD = "dat1234"



def executeMySQLSelect(QUERY):
    try:
        dbConnection = MySQLdb.connect(DB_IP, DB_USER, DB_PASSWORD, DB_NAME)
        try:
            cursor = dbConnection.cursor()
            cursor.execute("SET NAMES \'utf8\'")
            cursor.execute(QUERY)
            rows = cursor.fetchall()
            cursor.close()
            dbConnection.close()
            return rows
        except Exception, error:
            print 'Error executing query %s: %s' % (QUERY, error)
    except Exception, error:
        print 'Error connecting to database: %s' % str(error)


def getTotalCounters():
    try:
        query = """SELECT SUM(DAY_COUNT), SUM(WEEK_COUNT) FROM kyros4.TRACKING_CONTROL"""
        result = executeMySQLSelect(query)
        return result
    except Exception, error:
        print 'Error at function getTotalCounters: %s' % (str(error))


def getTopTracking():
    try:
        query = """SELECT TRACKING_CONTROL.IMEI, TRACKING_CONTROL.DAY_COUNT FROM TRACKING_CONTROL order by TRACKING_CONTROL.DAY_COUNT desc limit 10"""
        result = executeMySQLSelect(query)
        return result
    except Exception, error:
        print 'Error at function getTopTracking: %s' % (str(error))


def getLicense(imei):
    try:
        query = """SELECT VEHICLE.VEHICLE_LICENSE FROM OBT LEFT JOIN VEHICLE on OBT.DEVICE_ID=VEHICLE.DEVICE_ID where OBT.IMEI=xxx"""
        query = query.replace('xxx', str(imei))
        result = executeMySQLSelect(query)
        return result[0][0]
    except Exception, error:
        print 'Error at function getLicense: %s' % (str(error))


counters = getTotalCounters()

file_tracking_day = open('/var/www/html/plataformas/counters/kyros_tracking_day.txt','w') 
file_tracking_week = open('/var/www/html/plataformas/counters/kyros_tracking_week.txt','w') 

file_tracking_day.write(str(counters[0][0])) 
file_tracking_week.write(str(counters[0][1])) 

file_tracking_day.close()
file_tracking_week.close()

top_tracking = getTopTracking()

file_top_tracking = open('/var/www/html/plataformas/counters/kyros_top_tracking.json','w') 

strJson = ""
strJson = strJson + "{name: '" + str(getLicense(top_tracking[0][0])) + "',y: " + str(top_tracking[0][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[1][0])) + "',y: " + str(top_tracking[1][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[2][0])) + "',y: " + str(top_tracking[2][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[3][0])) + "',y: " + str(top_tracking[3][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[4][0])) + "',y: " + str(top_tracking[4][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[5][0])) + "',y: " + str(top_tracking[5][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[6][0])) + "',y: " + str(top_tracking[6][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[7][0])) + "',y: " + str(top_tracking[7][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[8][0])) + "',y: " + str(top_tracking[8][1]) + "},"
strJson = strJson + "{name: '" + str(getLicense(top_tracking[9][0])) + "',y: " + str(top_tracking[9][1]) + "}"

file_top_tracking.write(strJson) 

file_top_tracking.close()



########################################################################################################################



