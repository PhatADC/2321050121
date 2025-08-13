// Cho hai dãy số nguyên đã được sắp xếp không giảm a và b lần lượt 
// có n và m phần tử. Hãy ghép chúng thành dãy c được bố trí theo thứ tự không giảm.

// input: 6 7                               Output: 1 2 3 6 8 9 13 13 15 18 18 21 25  
//        1 6 9 13 18 18                        
//        2 3 8 13 15 21 25
// dùng kĩ thuật 2 con trỏ
#include <iostream>

using namespace std;

int main(){
    int n, m;
    cin >> n >> m;
    int a[n];
    int b[m];
    for(int &x : a){
        cin >> x;
    }
    for(int &x : b){
        cin >> x;
    }
    int i = 0, j = 0;
    while(i < n && j < m){ // chừng nào 2 cặp i j chỉ ở mảng a và b để so sánh
        if(a[i] <= b[j]){
            cout << a[i] << " ";
            i++;
        }
        else{
            cout << b[j] << " ";
            j++;
        }
    }
    while(i < n){
        cout << a[i] << " ";
        i++;
    }
    while(j < m){
        cout << b[j] << " ";
        j++;
    }
    return 0;

}