pipeline {
    agent any
    stages {
        stage('Get Repo') {
            steps {
                sh 'sudo chmod 777 -R /var/lib/jenkins/workspace/CICD/'  
                sh 'sudo rm -rf /var/lib/jenkins/workspace/CICD/*'
                git branch: 'master', url: 'https://github.com/alexdoe99/theti.git'
            }
        }

        stage('Update Code') {
            steps {
                sh 'cd /var/lib/jenkins/workspace/CICD && git pull origin master'
            }
        }

        stage('Test') {
            steps {
                sh 'cd /var/lib/jenkins/workspace/CICD && phpunit --log-junit result.xml UnitTestFiles/Test/'
            }
        }

        stage('Deploy') {
            steps {
                sh 'cd /var/lib/jenkins/workspace/CICD && docker-compose up -d --build'
            }
        }
    }
}
