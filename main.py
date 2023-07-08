import os
import pandas as pd
from pytrends.request import TrendReq

def getHustlesList(path) -> list:
    hustles = list()

    with open(path, 'r') as file:
        for line in file:
            hustles.append(line.strip())
            
    return hustles

def getNewHustlesList(path) -> list:
    hustles_new = list()
    
    for dir in os.listdir('data'):
        hustles_new.append(dir)

    with open('Hustles.txt', 'w') as file:
        for h in hustles_new:
            file.write(h + '\n')
        

def createFolders(path):
    hustles = getHustlesList(path)
    for hustle in hustles:
        path = os.getcwd()
        path += '/data/' + hustle
        print(os.path.abspath(path))
        if not os.path.exists(path):
            os.makedirs(path)

def feature_extraction(related_data, hustle):
    obj = related_data[hustle]
    
    rising = obj['rising']
    
    if rising is not None and rising.shape[0] > 0:
        rising['mode'] = 'rising'
    else:
        rising = pd.DataFrame()
        print('No rising queries for: ', hustle)
       
    top = obj['top']
    if top is not None and top.shape[0] > 0:
        top['mode'] = 'top'
    else:
        top = pd.DataFrame()
        print('No top queries for: ', hustle)
    
    df = pd.concat([rising, top], ignore_index=True)
    
    return df

def get_interest_over_time_df(pytrend, hustle):
    interest_over_time_df = pytrend.interest_over_time()
    interest_over_time_df.to_csv(f'data/{hustle}/interest_over_time.csv')

def get_interest_by_region_df(pytrend, hustle):
    regiondf = pytrend.interest_by_region()
    regiondf = regiondf[(regiondf != 0).all(1)]
    regiondf.dropna(how='all',axis=0, inplace=True)
    regiondf.to_csv(f'data/{hustle}/interest_by_region.csv')
    
def get_related_topics(pytrend, hustle):
    related_topic = pytrend.related_topics()
    
    related_topic = pd.DataFrame(feature_extraction(related_topic, hustle))
    related_topic.to_csv(f'data/{hustle}/related_topic.csv')
    
def get_related_queries(pytrend, hustle):
    related_queries = pytrend.related_queries()
    
    related_queries = pd.DataFrame(feature_extraction(related_queries, hustle))
    related_queries.to_csv(f'data/{hustle}/related_queries.csv')

def getData(hustle):
    print('Getting data for: ', hustle)
    
    pytrend = TrendReq()
    kw_list=[hustle]
    pytrend.build_payload(kw_list, timeframe='today 5-y')
    
    try:
        get_interest_over_time_df(pytrend, hustle)
        
        get_interest_by_region_df(pytrend, hustle)
        
        get_related_topics(pytrend, hustle)
        
        get_related_queries(pytrend, hustle)
        
        print('Hustle: ', hustle, ' done!')
    except:
        print('Error getting data for: ', hustle)
        
        with open('hustles-Error.txt', 'wb') as file:
            file.write(hustle)
        
        print('Hustle: ', hustle, ' added to Error file!')
    
        
if __name__ == '__main__':
    createFolders('newHustles.txt')
    for hustle in getHustlesList('newHustles.txt'):
        getData(hustle)
    
    
    

