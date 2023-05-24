# Seleniumでフォームの送信テストを自動化

## Seleniumのインストール

```shell
pip install selenium==3.141.0
# Anaconda環境の場合は
conda install selenium=3.141.0
```

```Python
url = "テストしたいフォームのURL"
browser = webdriver.Chrome("Chrome Driverへのパス")
browser.set_page_load_timeout(60)
browser.get(url)

#姓を自動入力
first_name = browser.find_element_by_name("first_name")
first_name.send_keys("山田")

###以下略

#index.phpの送信ボタンを自動で押す
submit = browser.find_element_by_name("submit")
submit.click()
```

