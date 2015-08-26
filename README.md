# fibo

cd  
git config --global http.sslVerify false  
git clone https://github.com/Dodotree/fibo  
cp ~/fibo/fibo.php /var/www/htdocs  

wget -q -O - http://localhost/fibo.php?N=5  
wget -q -O - http://localhost/fibo.php?N=0  
wget -q -O - http://localhost/fibo.php?N=-1  
wget -q -O - http://localhost/fibo.php?N=2.5  
wget -q -O - http://localhost/fibo.php?N=2,5  
wget -q -O - http://localhost/fibo.php?N=XYZ  

[pault@www fibo]$ wget -q -O - http://localhost/fibo.php?N=5  
1  
1  
2  
3  
5  
[pault@www fibo]$ wget -q -O - http://localhost/fibo.php?N=0  
'N' should be greater than zero!  
[pault@www fibo]$ wget -q -O - http://localhost/fibo.php?N=-1  
'N' should be greater than zero!  
[pault@www fibo]$ wget -q -O - http://localhost/fibo.php?N=2.5  
'N' should be an integer!  
[pault@www fibo]$ wget -q -O - http://localhost/fibo.php?N=2,5  
'N' should be an integer!  
[pault@www fibo]$ wget -q -O - http://localhost/fibo.php?N=XYZ  
'N' should be an integer!  
[pault@www fibo]$ wget -q -O - http://localhost/fibo.php?N=9  
1  
1  
2  
3  
5  
8  
13  
21  
34  

