
#!/usr/bin/gnuplot

set term png
set xdata time
set format x "%H:%M"
set timefmt "%H:%M"
set xtics 60*60
set datafile missing "0"

# linewidth 3, and associated point type 6 (a circle with a dot in it).
set style line 5 lt rgb "cyan" lw 3 pt 6

set title  "Uso de CPU "
set ylabel "% CPU en uso"
set xlabel "Hora del 2009_02_24"
set output "salida.png"
set yrange [0:130]
plot "datos.txt" using 1:2 notitle with linespoints ls 5
#plot "datos.txt" using 1:2 notitle smooth bezier