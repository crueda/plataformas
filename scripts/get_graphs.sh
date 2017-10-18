#!/usr/bin/env python

import requests
import time
import shutil


endDate = int(time.time())
startDate = endDate - 7800
path = '/var/www/html/plataformas/graphs/'
authPlataformas = ('plataformas', '01lbs10')

platforms = ['hawkeye', 'correos', 'kyros', 'indra', 'oficina']


hawkeyeGPRS5002 = path + 'graphHawkeyeSesiones5002.png'
hawkeyeSesiones = path + 'graphHawkeyeSesiones.png'
hawkeyeRed = path + 'graphHawkeyeRed.png'
hawkeyeDB = path + 'graphHawkeyeBD.png'

correosGPRS5000 = path + 'graphCorreosSesiones5000.png'
correosSesiones = path + 'graphCorreosSesiones.png'
correosRed = path + 'graphCorreosRed.png'
correosDB = path + 'graphCorreosBD.png'

kyrosGPRS5002 = path + 'graphKyrosSesiones5002.png'
kyrosGPRS5000 = path + 'graphKyrosSesiones5000.png'
kyrosSesiones = path + 'graphKyrosSesiones.png'
kyrosColas = path + 'graphKyrosColas.png'
kyrosRed = path + 'graphKyrosRed.png'
kyrosDB = path + 'graphKyrosBD.png'

uvaRed = path + 'graphUvaRed.png'
indraRed = path + 'graphIndraRed.png'
oficinaRed = path + 'graphOficinaRed.png'

geocodingRequest = path + 'graphGeocodingRequests.png'
geocodingHits = path + 'graphGeocodingHits.png'
geocodingLoad = path + 'graphGeocodingLoad.png'



hawkeyeURL = 'https://hawkeye.kyroslbs.com/pnp4nagios/image'
kyrosURL = 'https://www.kyros.es/pnp4nagios/image'
correosURL = 'https://correos.kyros.es/pnp4nagios/image'


hawkeyeGPRS5002Payload = {'host':'hawkeye-dmz-proxy', 'srv' : 'GPRS_5002_sessions', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(hawkeyeURL, params=hawkeyeGPRS5002Payload, auth=authPlataformas, stream=True)
with open(hawkeyeGPRS5002, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

hawkeyeSessionsPayload = {'host':'hawkeye-dmz-proxy', 'srv' : 'https_sessions', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(hawkeyeURL, params=hawkeyeSessionsPayload, auth=authPlataformas, stream=True)
with open(hawkeyeSesiones, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

response = requests.get('https://correos.kyros.es/traffic/hawkeye-day.png', auth=authPlataformas, stream=True)
with open(hawkeyeRed, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

hawkeyeDBPayload= {'host':'hawkeye-DB-stats', 'srv' : 'Queries_average', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(hawkeyeURL, params=hawkeyeDBPayload, auth=authPlataformas, stream=True)
with open(hawkeyeDB, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

kyrosGPRS5002Payload = {'host':'dmz-proxy-Virtual', 'srv' : 'GPRS_5002_sessions', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(kyrosURL, params=kyrosGPRS5002Payload, auth=authPlataformas, stream=True)
with open(kyrosGPRS5002, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

kyrosGPRS5000Payload = {'host':'dmz-proxy-Virtual', 'srv' : 'GPRS_5000_sessions', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(kyrosURL, params=kyrosGPRS5000Payload, auth=authPlataformas, stream=True)
with open(kyrosGPRS5000, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

kyrosSesionesPayload = {'host':'dmz-proxy-Virtual', 'srv' : 'https_sessions', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(kyrosURL, params=kyrosSesionesPayload, auth=authPlataformas, stream=True)
with open(kyrosSesiones, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

kyrosColasPayload = {'host':'rabbit-strainer-1', 'srv' : 'queue ALL 1y2', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(kyrosURL, params=kyrosColasPayload, auth=authPlataformas, stream=True)
with open(kyrosColas, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

response = requests.get('https://correos.kyros.es/traffic/kyros-day.png', auth=authPlataformas, stream=True)
with open(kyrosRed, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

kyrosDBPayload = {'host':'DB-stats', 'srv' : 'Queries_average', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(kyrosURL, params=kyrosDBPayload, auth=authPlataformas, stream=True)
with open(kyrosDB, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

correosGPRS5000Payload = {'host':'dmz-proxy-Virtual', 'srv' : 'GPRS_5000_sessions', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(correosURL, params=correosGPRS5000Payload, auth=authPlataformas, stream=True)
with open(correosGPRS5000, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

correosSesionesPayload = {'host':'dmz-proxy-Virtual', 'srv' : 'https_sessions', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(correosURL, params=correosSesionesPayload, auth=authPlataformas, stream=True)
with open(correosSesiones, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

response = requests.get('https://correos.kyros.es/traffic/correos-day.png', auth=authPlataformas, stream=True)
with open(correosRed, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

correosDBPayload = {'host':'DB-stats', 'srv' : 'Queries_average', 'view' : '0', 'source': '0', 'start': startDate, 'end': endDate  }
response = requests.get(correosURL, params=correosDBPayload, auth=authPlataformas, stream=True)
with open(correosDB, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

response = requests.get('https://correos.kyros.es/traffic/internet-day.png', auth=authPlataformas, stream=True)
with open(uvaRed, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

response = requests.get('https://correos.kyros.es/traffic/indra-day.png', auth=authPlataformas, stream=True)
with open(indraRed, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response

response = requests.get('https://oficina.kyroslbs.com/mrtg/89.140.174.193_1-day.png', auth=authPlataformas, stream=True)
with open(oficinaRed, 'wb') as out_file:
    shutil.copyfileobj(response.raw, out_file)
del response
