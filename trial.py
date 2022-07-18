import numpy as nm                            #Importing required libraries.
import matplotlib.pyplot as mtp    
import pandas as pd 
from sklearn.preprocessing import LabelEncoder, OneHotEncoder 
from sklearn.compose import ColumnTransformer
from sklearn.preprocessing import StandardScaler
from sklearn.cluster import KMeans  
import matplotlib.pyplot as plt
from sklearn.preprocessing import StandardScaler
import pickle
from flask import Flask, render_template, request
from sklearn.utils.extmath import weighted_mode

data_set= pd.read_csv('Dataset.csv')     #Importing Dataset.csv file.
data_set

x = data_set
onehot_encoder = OneHotEncoder()      #Encoding the categorical variable BMI_tag
ct = ColumnTransformer([("BMI_tags", OneHotEncoder(), [9])], remainder = 'passthrough')
data_set = ct.fit_transform(data_set)
data_set = pd.DataFrame(data_set)
data_set.rename(columns = {0:'BMI_tag(7)', 1:'BMI_tag(8)', 2:'BMI_tag(9)', 3:'Person_no.', 4: 'Age', 5:'weight(kg)',
                              6:'height(m)',7:'gender', 8:'BMI', 9 :'BMR',
                             10:'activity_level',11:'calories_to_maintain_weight'}, inplace = True)
data_set

data_set.drop('Person_no.',                                 #Dropping the not required columns
axis='columns', inplace=True)
data_set.drop('gender',
axis='columns', inplace=True)
data_set.drop('Age',                                 #Dropping the not required columns
axis='columns', inplace=True)
data_set.drop('weight(kg)',
axis='columns', inplace=True)
data_set.drop('height(m)',                                 #Dropping the not required columns
axis='columns', inplace=True)
data_set.drop('BMR',
axis='columns', inplace=True)
data_set.drop('calories_to_maintain_weight',
axis='columns', inplace=True)
data_set
data_set

data_set                                                   #Feature Scaling
st_x= StandardScaler()  
data_set= st_x.fit_transform(data_set)  
data_set = pd.DataFrame(data_set)
data_set

kmeans = KMeans(n_clusters = 5, random_state = 2)           #Applying kmeans algo
kmeans = kmeans.fit(data_set)
kmeans.labels_
predictions = kmeans.predict(data_set)
unique, counts = nm.unique(predictions, return_counts = True)
counts = counts.reshape(1,5)
countscldf = pd.DataFrame(counts, columns = ["Cluster 1", "Cluster 2", "Cluster 3", "Cluster 4", "Cluster 5"])
countscldf

app = Flask(__name__)
model2 = pickle.load(open('model2.pkl', 'rb'))
model1 = pickle.load(open('model1.pkl', 'rb'))

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
    pre = kmeans.predict(df)
    return render_template  ('dietpl.html', result = pre)

    if __name__ == "__main__":
        app.run(debug=True)

