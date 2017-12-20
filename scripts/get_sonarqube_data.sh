#!/usr/bin/env python

import json
import requests

counter_bug = 0
counter_vul = 0
counter_smell = 0

counter_dispatcher_bug = 0
counter_dispatcher_vul = 0
counter_dispatcher_smell = 0
counter_dispatcher_other = 0

counter_kyrosview_bug = 0
counter_kyrosview_vul = 0
counter_kyrosview_smell = 0

counter_kyrosapi_bug = 0
counter_kyrosapi_vul = 0
counter_kyrosapi_smell = 0

counter_strainer_bug = 0
counter_strainer_vul = 0
counter_strainer_smell = 0

counter_kcs_bug = 0
counter_kcs_vul = 0
counter_kcs_smell = 0

counter_correos_dispatcher_bug = 0
counter_correos_dispatcher_vul = 0
counter_correos_dispatcher_smell = 0
counter_correos_dispatcher_other = 0

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosDispatcher&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_dispatcher_bug = json_data['total']
counter_bug += counter_dispatcher_bug
	
response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosDispatcher&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_dispatcher_vul = json_data['total']
counter_vul += counter_dispatcher_vul

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosDispatcher&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
counter_dispatcher_smell = json_data['total']
counter_smell += counter_dispatcher_smell

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyroViewr&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kyrosview_bug = json_data['total']
counter_bug += counter_kyrosview_bug
	
response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosView&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kyrosview_vul = json_data['total']
counter_vul += counter_kyrosview_vul

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosView&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kyrosview_smell = json_data['total']
counter_smell += counter_kyrosview_smell

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosAPI&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kyrosapi_bug = json_data['total']
counter_bug += counter_kyrosapi_bug
	
response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyroAPI&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kyrosapi_vul = json_data['total']
counter_vul += counter_kyrosapi_vul

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosAPI&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kyrosapi_smell = json_data['total']
counter_smell += counter_kyrosapi_smell

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosStrainer&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_strainer_bug = json_data['total']
counter_bug += counter_strainer_bug

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosStrainer&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_strainer_vul = json_data['total']
counter_vul += counter_strainer_vul

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosStrainer&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_strainer_smell = json_data['total']
counter_smell += counter_strainer_smell

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KCS&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kcs_bug = json_data['total']
counter_bug += counter_kcs_bug

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KCS&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kcs_vul = json_data['total']
counter_vul += counter_kcs_vul

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KCS&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_kcs_smell = json_data['total']
counter_smell += counter_kcs_smell

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=CorreosDispatcher&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_correos_dispatcher_bug = json_data['total']
counter_bug += counter_dispatcher_bug
	
response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=CorreosDispatcher&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
counter_correos_dispatcher_vul = json_data['total']
counter_vul += counter_dispatcher_vul

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=CorreosDispatcher&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
counter_correos_dispatcher_smell = json_data['total']
counter_smell += counter_dispatcher_smell


# Volcar la salida a fichero
results_file = open('../counters/sonarqube.csv','w') 
results_file.write (str(counter_bug) + ";" + str(counter_vul) + ";" + str(counter_smell) + "\r\n")
results_file.write (str(counter_dispatcher_bug) + ";" + str(counter_dispatcher_vul) + ";" + str(counter_dispatcher_smell) + "\r\n")
results_file.write (str(counter_kyrosview_bug) + ";" + str(counter_kyrosview_vul) + ";" + str(counter_kyrosview_smell) + "\r\n")
results_file.write (str(counter_kyrosapi_bug) + ";" + str(counter_kyrosapi_vul) + ";" + str(counter_kyrosapi_smell) + "\r\n")
results_file.write (str(counter_strainer_bug) + ";" + str(counter_strainer_vul) + ";" + str(counter_strainer_smell) + "\r\n")
results_file.write (str(counter_kcs_bug) + ";" + str(counter_kcs_vul) + ";" + str(counter_kcs_smell) + "\r\n")
results_file.write (str(counter_correos_dispatcher_bug) + ";" + str(counter_correos_ispatcher_vul) + ";" + str(counter_correos_dispatcher_smell) + "\r\n")
results_file.close()