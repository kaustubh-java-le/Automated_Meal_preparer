import pickle
import re
import numpy as nm  # Importing required libraries.
import pandas as pd
from flask import Flask, render_template, request
from sklearn.cluster import KMeans

app = Flask(__name__)
model1 = pickle.load(open('model1.pkl', 'rb'))
model5 = pickle.load(open('model5.pkl', 'rb'))

data_set1= pd.read_csv('rawdata.csv')     #Importing Dataset.csv file.
data_set1

@app.route('/')
def home():
    return render_template('dietpl.html')


@app.route('/predict',methods=['POST'])
def predict():
    if request.method == "POST":
        age = request.form.get("age")
        weight = request.form.get("weight")
        height = request.form.get("height")
        BMITag = request.form.get("BMITag")
        BMI = request.form.get("BMI")
        AR = request.form.get("ActivityRate")
        float(age)
        float(weight)
        float(height)
        float(BMITag)
        float(BMI)
        float(AR)
    
    L = [BMITag,BMI,AR]
    BMI_tag7 = 0
    BMI_tag8 = 0
    BMI_tag9 = 0
    if(L[0] == 7):
        BMI_tag7 = 1
    elif(L[0] == 8):
        BMI_tag8 = 1
    else:
        BMI_tag9 = 1
    data = {'BMI_tag(7)':[BMI_tag7], 'BMI_tag(8)':[BMI_tag8], 'BMI_tag(9)':[BMI_tag9], 'BMI':[L[1]],'ActivityRate':[L[2]]}
    df = pd.DataFrame(data)
    df = nm.array(df)
    model1 = pickle.load(open('model1.pkl', 'rb'))
    df = model1.transform(df)
    kmeans = KMeans(n_clusters = 5, random_state = 1)           #Applying kmeans algo
    kmeans = kmeans.fit(data_set1)
    result = kmeans.predict(df)
    if(result==0):
        return render_template('dpl0.html', result = result)
    elif(result == 4):
        return render_template('dpl4.html',result = result)
    elif(result == 3):
        return render_template('dpl3.html',result = result)
    elif(result == 2):
        return render_template('dpl2.html',result = result)
    else:
        return render_template('dpl1.html',result = result)

    
    

