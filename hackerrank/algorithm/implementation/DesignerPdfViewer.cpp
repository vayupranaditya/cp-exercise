#include <bits/stdc++.h>

using namespace std;

int designerPdfViewer(vector <int> h, string word) {
    // Complete this function
    unsigned char max=0;
    for(int i=0; i<word.size();i++){
        if(max<h[word[i]-97]){
            max=h[word[i]-97];
        }
    }
    return word.size()*max;
}

int main() {
    vector<int> h(26);
    for(int h_i = 0; h_i < 26; h_i++){
       cin >> h[h_i];
    }
    string word;
    cin >> word;
    int result = designerPdfViewer(h, word);
    cout << result << endl;
    return 0;
}
