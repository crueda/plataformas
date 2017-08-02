endDate=$(date +%s)
initDate=$((endDate-7800))

urlGraphHawkeyeSesiones5002="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/pnp4nagios/image?host=hawkeye-dmz-proxy&srv=GPRS_5002_sessions&view=0&source=0&start="$initDate"&end="$endDate
urlGraphCorreosSesiones5000="https://admin:m0rt4d3l0@correos.kyros.es/pnp4nagios/image?host=dmz-proxy-Virtual&srv=GPRS_5000_sessions&view=0&source=0&start="$initDate"&end="$endDate
urlGraphKyrosSesiones5002="https://admin:m0rt4d3l0@kyros.es:8443/pnp4nagios/image?host=dmz-proxy-Virtual&srv=GPRS_5002_sessions&view=0&source=0&start="$initDate"&end="$endDate
urlGraphKyrosSesiones5000="https://admin:m0rt4d3l0@kyros.es:8443/pnp4nagios/image?host=dmz-proxy-Virtual&srv=GPRS_5000_sessions&view=0&source=0&start="$initDate"&end="$endDate

urlGraphHawkeyeSesiones="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/pnp4nagios/image?host=hawkeye-dmz-proxy&srv=https_sessions&view=0&source=0&start="$initDate"&end="$endDate
urlGraphCorreosSesiones="https://admin:m0rt4d3l0@correos.kyros.es/pnp4nagios/image?host=dmz-proxy-Virtual&srv=https_sessions&view=0&source=0&start="$initDate"&end="$endDate
urlGraphKyrosSesiones="https://admin:m0rt4d3l0@kyros.es:8443/pnp4nagios/image?host=dmz-proxy-Virtual&srv=https_sessions&view=0&source=0&start="$initDate"&end="$endDate
urlGraphKyrosColas="https://admin:m0rt4d3l0@kyros.es:8443/pnp4nagios/image?host=rabbit-strainer-1&srv=queue%20ALL%201y2&view=0&source=0&start="$initDate"&end="$endDate

urlGraphHawkeyeBD="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/pnp4nagios/image?host=DB-stats&srv=Queries_average&view=0&source=0&start="$initDate"&end="$endDate
urlGraphCorreosBD="https://admin:m0rt4d3l0@correos.kyros.es/pnp4nagios/image?host=DB-stats&srv=Queries_average&view=0&source=0&start="$initDate"&end="$endDate
urlGraphKyrosBD="https://admin:m0rt4d3l0@kyros.es:8443/pnp4nagios/image?host=DB-stats&srv=Queries_average&view=0&source=0&start="$initDate"&end="$endDate

urlGraphUvaRed="https://admin:m0rt4d3l0@correos.kyros.es/traffic/internet-day.png"
urlGraphOficinaRed="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/mrtg/89.140.174.193_1-day.png"
urlGraphSitRed="http://nagiosadmin:p4j4r0@mykyros.es/traffic/192.168.24.1_3-day.png"

wget --output-document=/var/www/html/plataformas/graphs/graphHawkeyeSesiones5002.png $urlGraphHawkeyeSesiones5002
wget --output-document=/var/www/html/plataformas/graphs/graphCorreosSesiones5000.png $urlGraphCorreosSesiones5000
wget --output-document=/var/www/html/plataformas/graphs/graphKyrosSesiones5002.png $urlGraphKyrosSesiones5002
wget --output-document=/var/www/html/plataformas/graphs/graphKyrosSesiones5000.png $urlGraphKyrosSesiones5000

wget --output-document=/var/www/html/plataformas/graphs/graphHawkeyeSesiones.png $urlGraphHawkeyeSesiones
wget --output-document=/var/www/html/plataformas/graphs/graphCorreosSesiones.png $urlGraphCorreosSesiones
wget --output-document=/var/www/html/plataformas/graphs/graphKyrosSesiones.png $urlGraphKyrosSesiones
wget --output-document=/var/www/html/plataformas/graphs/graphKyrosColas.png $urlGraphKyrosColas

wget --output-document=/var/www/html/plataformas/graphs/graphUvaRed.png $urlGraphUvaRed
wget --output-document=/var/www/html/plataformas/graphs/graphOficinaRed.png $urlGraphOficinaRed
wget --output-document=/var/www/html/plataformas/graphs/graphSitRed.png $urlGraphSitRed

wget --output-document=/var/www/html/plataformas/graphs/graphHawkeyeBD.png $urlGraphHawkeyeBD
wget --output-document=/var/www/html/plataformas/graphs/graphCorreosBD.png $urlGraphCorreosBD
wget --output-document=/var/www/html/plataformas/graphs/graphKyrosBD.png $urlGraphKyrosBD
