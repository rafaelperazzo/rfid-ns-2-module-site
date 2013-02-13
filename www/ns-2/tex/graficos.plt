set encoding utf8
unset label
set key left top
set xlabel "Number of tags"
set ylabel "Time to identify the tags (ms)"
set autoscale
set mxtics
set mytics
#set format y "%g %%"
set grid xtics ytics lt 2 lw 0.5 lc rgb "#BEBEBE"
largura_linha=3
largura_ic=2
#Tabela de cores: http://gucky.uni-muenster.de/cgi-bin/rgbtab-en
#Linhas e pontos: http://sparky.rice.edu/gnuplot.html
#Linha normal
set style line 1 lc rgb 'black' lt -1 lw 1  pt 7 ps 1
#Linha com mecanismo
set style line 2 lc rgb 'red' lt 5 lw 3 pt 7 ps 0.8
#Linha dos ICs
set style line 3 lc rgb 'black' lt 5 lw 3 pt 1 ps 0.5
set terminal postscript eps
#######################################################
set output "imagens/identification.eps"
set border linewidth 3
set label 1 "Confidence Interval (CI) 95%" at 40,1615
#set label 2 "Q Algorithm - My simulation (100 iteractions)" at 50,1750
#set label 3 "Q Algorithm - Published paper simulation (Figure 7, Page 7)(approximate values)" at 50,1650
set xrange [0:550]
set yrange [0:1800]
set xtics 50,50,500
set ytics 100
set key default
plot 'sample.dat' using 1:2:3:4 with linespoint ls 1 title "Q Algorithm - My simulation (100 iteractions)", 'sample.dat' using 1:2:3:4 with errorbars ls 3 notitle, 'plot2.dat' using 1:2 with linespoint ls 2 title "Q Algorithm - Published paper simulation (Figure 7, Page 7)(approximate values)"
#######################################################
reset
set autoscale
set style line 1 lc rgb "blue"
set xlabel "Number of tags"
set ylabel "Error (ms)"
set output "imagens/error.eps"
set grid ytics lt 2 lw 0.5 lc rgb "#BEBEBE"
set style fill solid
set boxwidth 0.5
set yrange [0:80]
#set xrange [0:550]
#set xtics 50
set ytics 10
plot "plot3.dat" using 1:3:xtic(2) with boxes ls 1 title "Error graphic - Comparison between my simulations and paper simulatios"
