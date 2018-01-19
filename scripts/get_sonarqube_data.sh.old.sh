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


response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosDispatcher&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_dispatcher_bug += 1
	counter_bug += 1
	
response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosDispatcher&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_dispatcher_vul += 1
	counter_vul += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosDispatcher&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_dispatcher_smell += 1
	counter_smell += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyroViewr&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kyrosview_bug += 1
	counter_bug += 1
	
response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosView&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kyrosview_vul += 1
	counter_vul += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosView&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kyrosview_smell += 1
	counter_smell += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosAPI&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kyrosapi_bug += 1
	counter_bug += 1
	
response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyroAPI&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kyrosapi_vul += 1
	counter_vul += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosAPI&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kyrosapi_smell += 1
	counter_smell += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosStrainer&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_strainer_bug += 1
	counter_bug += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosStrainer&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_strainer_vul += 1
	counter_vul += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KyrosStrainer&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_strainer_smell += 1
	counter_smell += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KCS&types=BUG&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kcs_bug += 1
	counter_bug += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KCS&types=VULNERABILITY&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kcs_smell += 1
	counter_vul += 1

response = requests.get('http://172.26.5.103:9000/api/issues/search?ps=-1&projects=KCS&types=CODE_SMELL&statuses=OPEN')
json_data = json.loads(response.text)
issues = json_data['issues']
for element in issues:
	counter_kcs_smell += 1
	counter_smell += 1

# Volcar la salida a fichero
results_file = open('../counters/sonarqube.csv','w') 
results_file.write (str(counter_bug) + ";" + str(counter_vul) + ";" + str(counter_smell) + "\r\n")
results_file.write (str(counter_dispatcher_bug) + ";" + str(counter_dispatcher_vul) + ";" + str(counter_dispatcher_smell) + "\r\n")
results_file.write (str(counter_kyrosview_bug) + ";" + str(counter_kyrosview_vul) + ";" + str(counter_kyrosview_smell) + "\r\n")
results_file.write (str(counter_kyrosapi_bug) + ";" + str(counter_kyrosapi_vul) + ";" + str(counter_kyrosapi_smell) + "\r\n")
results_file.write (str(counter_strainer_bug) + ";" + str(counter_strainer_vul) + ";" + str(counter_strainer_smell) + "\r\n")
results_file.write (str(counter_kcs_bug) + ";" + str(counter_kcs_vul) + ";" + str(counter_kcs_smell) + "\r\n")
results_file.close()