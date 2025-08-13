//cho 2 so nguyen duong S va T (S, T < 10000) va hai thao tac (a) va (b) duoi day:
//	Thao tac (a): Tru S di 1 (S -= 1)
//	Thao tac (b): Nhan S voi 2 (S *= 2)
//Hay dich chuyen S thanh T sao cho so lan thuc tien cac thao tac (a), (b) la min. Vi du voi S = 2, T = 5 thi so cac buoc
//it nhat de dich chuyen S thanh T thong qua 4 thao tac sau:
//	Thao tac (a): 2 * 2 = 4;
//	Thao tac (b): 4 - 1 = 3;
//	Thao tac (a): 3 * 2 = 6;
//	Thao tac (b): 6 - 1 = 5;
//Input: 3                                           Output:
//     2 5                                                  4
//	   3 7                                                  4 
//	   7 4	                                                3

#include <iostream>
#include <queue>
#include <utility>
#include <set>

using namespace std;

int solve(int s, int t){
	// khoi tao pair de luu 2 so: so thu nhat de luu trang thai cua so hien tai, thu 2 la so buoc tinh
	// tu S den so hien tai la bnhieu buoc
	queue<pair<int, int>> q;
	// khoi tao set de luu cac trang thai cua cac so da duoc duyet de tranh lap lai cac trang thai da duyet
	set<int> se;
	se.insert(s);
	q.push({s, 0}); // them cap dinh, trong do s la so bat dau con 0 la so buoc di chuyen toi chinh no la 0
	while(!q.empty()){
		// chung nao q chua rong thi lay ra cap dinh o dau hang doi
		pair<int, int> top = q.front();
		q.pop(); 
		// neu so hien tai = so dich (t) thi return top.second(so buoc di chuyen tu dinh S den dinh hien tai)
		if(top.first == t)
		return top.second;
		if(top.first * 2 == t || top.first - 1 == t) 
		// neu 2 trong 2 thao tac tren xay ra thi chi can them 1 thao tac la biet duoc so hien tai nhay ra den so tiep theo
		return top.second + 1;
		if(se.find(top.first * 2) == se.end() && top.first < t){
			// neu ma trang thai cua so hien tai chua tung duoc duyet thi duyet va neu ma muon thuc hien thao tac *2
			q.push({top.first * 2, top.second + 1});
			se.insert(top.first * 2);
		}
		if(se.find(top.first - 1) == se.end() && top.first > 1){
			q.push({top.first - 1, top.second + 1});
			se.insert(top.first - 1);
		}
	} 
}

using namespace std;

int main(){
	int t;
	cin >> t;
	while(t--){
		int s, t;
		cin >> s >> t;
		cout << solve(s, t) << endl; 
	}
	
	return 0;
	
}
