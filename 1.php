pipeline{
    agent any
    stages{
        stage("checkout the code from git reprository"){
            steps
            }
        }
        stage("code compile"){
            steps{
                sh "mvn compile"
            }
        }
        stage("code testing"){
            steps{
                sh "mvn test"
            }
        }
        stage("code Qa"){
            steps{
                sh "mvn pmd:pmd"
            }
        }
        stage("code package"){
            steps{
                sh "mvn package"
            }
        }
    }
}              
